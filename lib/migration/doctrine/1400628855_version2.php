<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version2 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createForeignKey('key', 'key_machine_id_machine_id', array(
             'name' => 'key_machine_id_machine_id',
             'local' => 'machine_id',
             'foreign' => 'id',
             'foreignTable' => 'machine',
             ));
        $this->createForeignKey('key', 'key_pool_id_product_id', array(
             'name' => 'key_pool_id_product_id',
             'local' => 'pool_id',
             'foreign' => 'id',
             'foreignTable' => 'product',
             ));
        $this->createForeignKey('key', 'key_pool_id_pool_id', array(
             'name' => 'key_pool_id_pool_id',
             'local' => 'pool_id',
             'foreign' => 'id',
             'foreignTable' => 'pool',
             ));
        $this->createForeignKey('key', 'key_buyer_id_sf_guard_user_id', array(
             'name' => 'key_buyer_id_sf_guard_user_id',
             'local' => 'buyer_id',
             'foreign' => 'id',
             'foreignTable' => 'sf_guard_user',
             ));
        $this->createForeignKey('pool', 'pool_created_by_sf_guard_user_id', array(
             'name' => 'pool_created_by_sf_guard_user_id',
             'local' => 'created_by',
             'foreign' => 'id',
             'foreignTable' => 'sf_guard_user',
             'onUpdate' => 'CASCADE',
             'onDelete' => 'CASCADE',
             ));
        $this->createForeignKey('pool', 'pool_updated_by_sf_guard_user_id', array(
             'name' => 'pool_updated_by_sf_guard_user_id',
             'local' => 'updated_by',
             'foreign' => 'id',
             'foreignTable' => 'sf_guard_user',
             'onUpdate' => 'CASCADE',
             'onDelete' => 'CASCADE',
             ));
        $this->createForeignKey('product', 'product_created_by_sf_guard_user_id', array(
             'name' => 'product_created_by_sf_guard_user_id',
             'local' => 'created_by',
             'foreign' => 'id',
             'foreignTable' => 'sf_guard_user',
             'onUpdate' => 'CASCADE',
             'onDelete' => 'CASCADE',
             ));
        $this->createForeignKey('product', 'product_updated_by_sf_guard_user_id', array(
             'name' => 'product_updated_by_sf_guard_user_id',
             'local' => 'updated_by',
             'foreign' => 'id',
             'foreignTable' => 'sf_guard_user',
             'onUpdate' => 'CASCADE',
             'onDelete' => 'CASCADE',
             ));
        $this->createForeignKey('pool_version', 'pool_version_id_pool_id', array(
             'name' => 'pool_version_id_pool_id',
             'local' => 'id',
             'foreign' => 'id',
             'foreignTable' => 'pool',
             'onUpdate' => 'CASCADE',
             'onDelete' => 'CASCADE',
             ));
        $this->createForeignKey('product_version', 'product_version_id_product_id', array(
             'name' => 'product_version_id_product_id',
             'local' => 'id',
             'foreign' => 'id',
             'foreignTable' => 'product',
             'onUpdate' => 'CASCADE',
             'onDelete' => 'CASCADE',
             ));
        $this->addIndex('key', 'key_machine_id', array(
             'fields' =>
             array(
              0 => 'machine_id',
             ),
             ));
        $this->addIndex('key', 'key_pool_id', array(
             'fields' =>
             array(
              0 => 'pool_id',
             ),
             ));
        $this->addIndex('key', 'key_buyer_id', array(
             'fields' =>
             array(
              0 => 'buyer_id',
             ),
             ));
        $this->addIndex('pool', 'pool_created_by', array(
             'fields' =>
             array(
              0 => 'created_by',
             ),
             ));
        $this->addIndex('pool', 'pool_updated_by', array(
             'fields' =>
             array(
              0 => 'updated_by',
             ),
             ));
        $this->addIndex('product', 'product_created_by', array(
             'fields' =>
             array(
              0 => 'created_by',
             ),
             ));
        $this->addIndex('product', 'product_updated_by', array(
             'fields' =>
             array(
              0 => 'updated_by',
             ),
             ));
        $this->addIndex('pool_version', 'pool_version_id', array(
             'fields' =>
             array(
              0 => 'id',
             ),
             ));
        $this->addIndex('product_version', 'product_version_id', array(
             'fields' =>
             array(
              0 => 'id',
             ),
             ));
    }

    public function down()
    {
        $this->createForeignKey('machine', 'machine_key_id_key_id', array(
             'name' => 'machine_key_id_key_id',
             'local' => 'key_id',
             'foreign' => 'id',
             'foreignTable' => 'key',
             ));
        $this->dropForeignKey('key', 'key_machine_id_machine_id');
        $this->dropForeignKey('key', 'key_pool_id_product_id');
        $this->dropForeignKey('key', 'key_pool_id_pool_id');
        $this->dropForeignKey('key', 'key_buyer_id_sf_guard_user_id');
        $this->dropForeignKey('pool', 'pool_created_by_sf_guard_user_id');
        $this->dropForeignKey('pool', 'pool_updated_by_sf_guard_user_id');
        $this->dropForeignKey('product', 'product_created_by_sf_guard_user_id');
        $this->dropForeignKey('product', 'product_updated_by_sf_guard_user_id');
        $this->dropForeignKey('pool_version', 'pool_version_id_pool_id');
        $this->dropForeignKey('product_version', 'product_version_id_product_id');
        $this->removeIndex('key', 'key_machine_id', array(
             'fields' =>
             array(
              0 => 'machine_id',
             ),
             ));
        $this->removeIndex('key', 'key_pool_id', array(
             'fields' =>
             array(
              0 => 'pool_id',
             ),
             ));
        $this->removeIndex('key', 'key_buyer_id', array(
             'fields' =>
             array(
              0 => 'buyer_id',
             ),
             ));
        $this->removeIndex('pool', 'pool_created_by', array(
             'fields' =>
             array(
              0 => 'created_by',
             ),
             ));
        $this->removeIndex('pool', 'pool_updated_by', array(
             'fields' =>
             array(
              0 => 'updated_by',
             ),
             ));
        $this->removeIndex('product', 'product_created_by', array(
             'fields' =>
             array(
              0 => 'created_by',
             ),
             ));
        $this->removeIndex('product', 'product_updated_by', array(
             'fields' =>
             array(
              0 => 'updated_by',
             ),
             ));
        $this->removeIndex('pool_version', 'pool_version_id', array(
             'fields' =>
             array(
              0 => 'id',
             ),
             ));
        $this->removeIndex('product_version', 'product_version_id', array(
             'fields' =>
             array(
              0 => 'id',
             ),
             ));
    }
}