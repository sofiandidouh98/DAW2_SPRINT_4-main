<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForeignKeysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {        
         Schema::table('users', function (Blueprint $table) {
             $table->foreignId('id_user_type')->constrained('user_types')->cascadeOnUpdate()->cascadeOnDelete();
         });

         Schema::table('user_profiles', function (Blueprint $table) {
             $table->foreignId('id_user')->constrained('users')->cascadeOnUpdate()->cascadeOnDelete();
         });

         Schema::table('user_logs', function (Blueprint $table) {
             $table->foreignId('id_user')->constrained('users')->cascadeOnUpdate()->cascadeOnDelete();
         });

        Schema::table('users_messages', function (Blueprint $table) {
            $table->foreignId('id_user')->constrained('users')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('id_message')->constrained('messages')->cascadeOnUpdate()->cascadeOnDelete();
        });

        Schema::table('messages', function (Blueprint $table) {
            $table->foreignId('sent_by')->constrained('users')->cascadeOnUpdate()->cascadeOnDelete();
        });


        
         Schema::table('invoices', function (Blueprint $table) {
             $table->foreignId('id_user')->constrained('users')->cascadeOnUpdate()->cascadeOnDelete();
         });

         Schema::table('invoice_rows', function (Blueprint $table) {
             $table->foreignId('id_material')->constrained('materials')->cascadeOnUpdate()->cascadeOnDelete();
             $table->foreignId('id_invoice')->constrained('invoices')->cascadeOnUpdate()->cascadeOnDelete();
             $table->foreignId('id_machine')->constrained('machines')->cascadeOnUpdate()->cascadeOnDelete();
         });

         Schema::table('incidents', function (Blueprint $table) {
             $table->foreignId('id_machine')->constrained('machines')->cascadeOnUpdate()->cascadeOnDelete();
             $table->foreignId('id_user')->constrained('users')->cascadeOnUpdate()->cascadeOnDelete();
             $table->foreignId('id_incident_state')->constrained('incidents_states')->cascadeOnUpdate()->cascadeOnDelete();
         });

         Schema::table('reservations', function (Blueprint $table) {
             $table->foreignId('id_machine')->constrained('machines')->cascadeOnUpdate()->cascadeOnDelete();
             $table->foreignId('created_by')->constrained('users')->cascadeOnUpdate()->cascadeOnDelete();
         });

         Schema::table('tasks_users', function (Blueprint $table) {
             $table->foreignId('id_user')->constrained('users')->cascadeOnUpdate()->cascadeOnDelete();
             $table->foreignId('id_task')->constrained('tasks')->cascadeOnUpdate()->cascadeOnDelete();
         });

        

         Schema::table('proposals', function (Blueprint $table) {
             $table->foreignId('id_category_proposal_project')->constrained('categories_proposals_projects')->cascadeOnUpdate()->cascadeOnDelete();
             $table->foreignId('id_state_proposal_project')->constrained('states_proposals_projects')->cascadeOnUpdate()->cascadeOnDelete();
             $table->foreignId('id_creator')->constrained('users')->cascadeOnUpdate()->cascadeOnDelete();

         });

         Schema::table('projects', function (Blueprint $table) {
             $table->foreignId('id_proposal')->constrained('proposals')->cascadeOnUpdate()->cascadeOnDelete();
             $table->foreignId('id_category_proposal_project')->constrained('categories_proposals_projects')->cascadeOnUpdate()->cascadeOnDelete();
             $table->foreignId('id_state_proposal_project')->constrained('states_proposals_projects')->cascadeOnUpdate()->cascadeOnDelete();
             $table->foreignId('id_creator')->constrained('users')->cascadeOnUpdate()->cascadeOnDelete();
         });

         Schema::table('users_proposals', function (Blueprint $table) {
             $table->foreignId('id_user')->constrained('users')->cascadeOnUpdate()->cascadeOnDelete();
             $table->foreignId('id_proposal')->constrained('proposals')->cascadeOnUpdate()->cascadeOnDelete();
             $table->foreignId('id_user_role')->constrained('users_roles')->cascadeOnUpdate()->cascadeOnDelete();
         });

        Schema::table('users_projects', function (Blueprint $table) {
            $table->foreignId('id_user')->constrained('users')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('id_project')->constrained('projects')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('id_user_role')->constrained('users_roles')->cascadeOnUpdate()->cascadeOnDelete();
        });

        Schema::table('documents', function (Blueprint $table) {
            $table->foreignId('id_document_type')->constrained('documents_types')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('id_parent_document')->nullable()->constrained('documents')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('id_project')->constrained('projects')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('id_user')->constrained('users')->cascadeOnUpdate()->cascadeOnDelete();
        });

        Schema::table('tasks', function (Blueprint $table) {
            $table->foreignId('created_by')->constrained('users')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('id_project')->constrained('projects')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('id_task_state')->constrained('tasks_states')->cascadeOnUpdate()->cascadeOnDelete();
        });

        Schema::table('resources', function (Blueprint $table) {
            $table->foreignId('provided_by')->constrained('users')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('id_project')->constrained('projects')->cascadeOnUpdate()->cascadeOnDelete();
        });

        Schema::table('abilities_user_profiles', function (Blueprint $table) {
            $table->foreignId('id_ability')->constrained('abilities')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('id_user_profile')->constrained('user_profiles')->cascadeOnUpdate()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Schema::dropIfExists('foreign_keys');
    }
}
