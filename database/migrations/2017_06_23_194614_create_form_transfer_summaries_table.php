<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormTransferSummariesTable extends Migration
{
    /**
     * Run the migrations.
     * Creates form_transfer_summaries table.
     * From UI, Select Patient -> Encounter -> Miscellaneous -> Transfer Summary. |
     * Select Patient -> Encounter -> Patient/Client -> Visit Forms -> Transfer Summary.
     * @author Priyanshu Sinha <pksinha217@gmail.com>
     * @author Mua N. Laurent <muarachmann@gmail.com>
     * @return void
     */
    public function up()
    {
        Schema::create('form_transfer_summaries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('encounter_id')->comment('Foreign key to form_encounters table.');
            $table->unsignedBigInteger('patient_id')->comment('Foreign Key to patients table.');
            $table->unsignedBigInteger('user_id')->comment('Foreign key to users table.');
            $table->integer('provider_id')->index()
                ->comment('Initially provider is set to be user, but when an encounter has a fee sheet
                filled out (billing table items are associated with that encounter number) then the fee sheet sets
                the Provider fields to equal the Rendering Provider choice in the fee sheet');

            $table->dateTime('date')->comment('Date when this form filled.');
            $table->boolean('authorized')->default(0)
                ->comment('Means a clinician (physician, etc...) has verified this form as part of
                the client record');
            $table->boolean('activity')->default(1)
                ->comment('A delete flag. 0 -> Yes | 1 -> No');
            $table->string('client_name')->comment('This is basically patient name.');
            $table->string('transfer_to')->comment('To whom it is transferred?');
            $table->date('transfer_date')->comment('When transfer is done?');
            $table->text('status_of_admission')->nullable()->comment('State of Admission"');
            $table->text('diagnosis')->nullable()->comment('Diagnosis');
            $table->text('intervention_provided')->nullable()->comment('Intervention');
            $table->text('overall_status_of_discharge')->nullable()->comment('Status of Discharge');

            $table->foreign('encounter_id')->references('id')
                ->on('encounters')->onDelete('cascade');
            $table->foreign('patient_id')->references('id')
                ->on('patients')->onDelete('cascade');
            $table->foreign('user_id')->references('id')
                ->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('form_transfer_summaries');
    }
}
