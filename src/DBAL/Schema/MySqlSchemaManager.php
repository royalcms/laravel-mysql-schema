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

namespace Royalcms\Laravel\MysqlSchema\DBAL\Schema;

use Doctrine\DBAL\Schema\MySqlSchemaManager as BaseMySqlSchemaManager;

/**
 * Schema manager for the MySql RDBMS.
 *
 * @author Konsta Vesterinen <kvesteri@cc.hut.fi>
 * @author Lukas Smith <smith@pooteeweet.org> (PEAR MDB2 library)
 * @author Roman Borschel <roman@code-factory.org>
 * @author Benjamin Eberlei <kontakt@beberlei.de>
 * @since  2.0
 */
class MySqlSchemaManager extends BaseMySqlSchemaManager
{

    public function listTableStatus()
    {
        $sql = $this->_platform->getListStatusSQL();

        $tables = $this->_conn->fetchAll($sql);
        $tableStatus = $this->_getPortableTableStatusList($tables);

        return $tableStatus;
    }


    /**
     * @param array $tables
     *
     * @return array
     */
    protected function _getPortableTableStatusList($tables)
    {
        $list = array();
        foreach ($tables as $value) {
            if ($value = $this->_getPortableTableStatusDefinition($value)) {
                $list[] = $value;
            }
        }

        return $list;
    }

    /**
     * @param array $table
     *
     * @return TableStatus
     */
    protected function _getPortableTableStatusDefinition($table)
    {
        $status = new TableStatus();

        $status->setName($table['Name']);
        $status->setEngine($table['Engine']);
        $status->setVersion($table['Version']);
        $status->setRowFormat($table['Row_format']);
        $status->setRows($table['Rows']);
        $status->setAvgRowLength($table['Avg_row_length']);
        $status->setDataLength($table['Data_length']);
        $status->setMaxDataLength($table['Max_data_length']);
        $status->setIndexLength($table['Index_length']);
        $status->setDataFree($table['Data_free']);
        $status->setAutoIncrement($table['Auto_increment']);
        $status->setCreateTime($table['Create_time']);
        $status->setUpdateTime($table['Update_time']);
        $status->setCheckTime($table['Check_time']);
        $status->setCollation($table['Collation']);
        $status->setChecksum($table['Checksum']);
        $status->setCreateOptions($table['Create_options']);
        $status->setComment($table['Comment']);

        return $status;
    }

}
