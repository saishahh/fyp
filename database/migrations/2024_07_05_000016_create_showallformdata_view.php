<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("
        CREATE VIEW IF NOT EXISTS ShowAllForms
        AS SELECT
        forms.id,users.name,users.email,
        forms.course,forms.phone,forms.company,forms.role,forms.state,forms.region,forms.review,forms.created_at
        FROM users INNER JOIN forms
        ON users.id=forms.user_id
        ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ShowAllForms');
    }


};