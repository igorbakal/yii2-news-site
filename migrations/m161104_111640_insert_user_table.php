<?php

use jamband\schemadump\Migration;

class m161104_111640_insert_user_table extends Migration
{
    public function up()
    {
        $this->insert('user', [
            'username' => 'User',
            'auth_key' => 'zaNVmG_u625BfwELIWypkI0kepSp8xfp',
            'password_hash' => '$2y$13$Ov/5KVhjx0uT1QrTpBwUV.WlUunHaAb9nKkAI0oyKo0KYZ1m6Xq1u',
            'password_reset_token' => null,
            'email' => 'test@test.ru',
            'email_confirm_token' => null,
            'status' => '10',
            'created_at' => '1477604128',
            'updated_at' => '1478088300',
            'notification_type' => 'a:1:{i:0;s:5:"email";}',
        ]);
        $this->insert('user', [
            'username' => 'Manager',
            'auth_key' => 'jGRGCBlX91ouXK0crjw5wSnMH203eivt',
            'password_hash' => '$2y$13$/4kHeIQdCTzynyYemDRfzuL.nmZ7JkAfO2l4Mv.vQUjkcGm7QV7iW',
            'password_reset_token' => null,
            'email' => 'manager@mysite.com',
            'email_confirm_token' => null,
            'status' => '10',
            'created_at' => '1477604937',
            'updated_at' => '1477604937',
            'notification_type' => 'a:1:{i:0;s:5:"email";}',
        ]);
        $this->insert('user', [
            'username' => 'Admin',
            'auth_key' => 'kkhhzwqq_WkwfoNiB-XBAYdLrziOhhdu',
            'password_hash' => '$2y$13$LJIDipWGLXa8USWfVjupTeABAIZ4By3iVM8oXrRmGwX/2Q2uHDULm',
            'password_reset_token' => null,
            'email' => 'admin@mysite.com',
            'email_confirm_token' => null,
            'status' => '10',
            'created_at' => '1477604990',
            'updated_at' => '1478200703',
            'notification_type' => 's:7:"browser";',
        ]);
        $this->insert('user', [
            'username' => 'test',
            'auth_key' => 'Un0Wwrbm4WVkNlhpl3Shlq44BdvNuQCg',
            'password_hash' => '$2y$13$rsLJHm.jH4BFyMzZeMsED.aouNhhVPzXpM3Ocifh3mIr9Uxmb/wNq',
            'password_reset_token' => null,
            'email' => 'info@mysite.com',
            'email_confirm_token' => null,
            'status' => '10',
            'created_at' => '1477608133',
            'updated_at' => '1477608133',
            'notification_type' => 'a:1:{i:0;s:5:"email";}',
        ]);
        $this->insert('user', [
            'username' => 'test2',
            'auth_key' => 'GCO77OjegUTJ5KV08NJK72PWORxD0Ana',
            'password_hash' => '$2y$13$X5U54BunhVjqISTFa3gIc.kKHfM5kb8wQqBSA5GS7iZitbwUBQB6a',
            'password_reset_token' => null,
            'email' => 'test@oops.ru',
            'email_confirm_token' => null,
            'status' => '10',
            'created_at' => '1478087285',
            'updated_at' => '1478115898',
            'notification_type' => 'a:1:{i:0;s:7:"browser";}',
        ]);
    }

    public function down()
    {
        $this->delete('user', 'username = "User"');
        $this->delete('user', 'username = "Manager"');
        $this->delete('user', 'username = "Admin"');
        $this->delete('user', 'username = "test"');
        $this->delete('user', 'username = "test2"');
    }
}
