<?php
/*
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
 * A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT
 * OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
 * SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT
 * LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
 * DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
 * THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
 * OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * This software consists of voluntary contributions made by many individuals
 * and is licensed under the MIT license. For more information, see
 * <http://www.doctrine-project.org>.
 */

namespace Royalcms\Laravel\MysqlSchema\DBAL\Platforms;

use Doctrine\DBAL\Schema\Index;
use Doctrine\DBAL\Schema\TableDiff;
use Doctrine\DBAL\Platforms\MySqlPlatform as BaseMySqlPlatform;

/**
 * Provides the behavior, features and SQL dialect of the MySQL 5.7 database platform.
 *
 * @author Steve Müller <st.mueller@dzh-online.de>
 * @link   www.doctrine-project.org
 * @since  2.5
 */
class MySQLPlatform extends BaseMySqlPlatform
{

    /**
     * Returns the SQL snippet that declares a floating point column of arbitrary precision.
     *
     * @param mixed[] $columnDef
     *
     * @return string
     */
    public function getDecimalTypeDeclarationSQL(array $columnDef)
    {
        $columnDef['precision'] = ! isset($columnDef['precision']) || empty($columnDef['precision'])
            ? 10 : $columnDef['precision'];
        $columnDef['scale']     = ! isset($columnDef['scale']) || empty($columnDef['scale'])
            ? 0 : $columnDef['scale'];

        $DSQL = 'DECIMAL(' . $columnDef['precision'] . ', ' . $columnDef['scale'] . ')';

        return $DSQL . $this->getUnsignedDeclaration($columnDef);
    }

    /**
     * Get unsigned declaration for a column.
     *
     * @param mixed[] $columnDef
     *
     * @return string
     */
    private function getUnsignedDeclaration(array $columnDef)
    {
        return ! empty($columnDef['unsigned']) ? ' UNSIGNED' : '';
    }

    /**
     * {@inheritDoc}
     */
    public function getListStatusSQL()
    {
        return 'SHOW TABLE STATUS';
    }


    /**
     * {@inheritDoc}
     */
    public function getListTableStatusSQL($table)
    {
        return "SHOW TABLE STATUS LIKE '%".$table."%'";
    }

}
