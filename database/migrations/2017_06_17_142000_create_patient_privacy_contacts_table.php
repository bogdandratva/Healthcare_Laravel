<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientPrivacyContactsTable extends Migration
{
    /**
     * Run the migrations.
     * Creates patient_privacy_contacts table.
     * This table is intended to create which contact should view what privacy information.
     * Means contact wise privacy disclosure.
     * @author Priyanshu Sinha <pksinha217@gmail.com>
     * @author Mua N. Laurent <muarachmann@gmail.com>
     * @return void
     */
    public function up()
    {
        Schema::create('patient_privacy_contacts', function (Blueprint $table) {
            $table->bigIncrements('id')->comment = "Primary Key. Autoincrement";

            $table->unsignedBigInteger('patient_id')
                ->comment('Foreign key to patients table');
	        $table->unsignedBigInteger('contact_id')
                ->comment('Foreign key to patient_contacts table.');

	        $table->boolean('allow_patient_portal')->default(0)
                ->comment('Allow patient portal. Initially allowed to be false.');
	        $table->boolean('allow_health_info_ex')->default(0)
                ->comment('Allow health information exchange. Initially allowed to be false.');
	        $table->boolean('allow_imm_info_share')->default(0)
                ->comment('Allow immunization information share. Initially allowed to be false.');
	        $table->boolean('allow_imm_reg_use')->default(0)
                ->comment('Allow immunization registration info. Initially allowed to be false.');
	        $table->boolean('vfc')->default(0)
                ->comment('Allow vfc. Initially allowed to be false.');
	        $table->string('secure_email')
                ->comment('Previously email_direct. Secure email of patient.');
	        $table->string('deceased_reason')->nullable()->comment('Reason for deceasing.');
	        $table->date('deceased_date')->nullable()->comment('Deceased date');

            $table->foreign('patient_id')->references('id')
                ->on('patients')->onDelete('cascade');
            $table->foreign('contact_id')->references('id')
                ->on('patient_contacts')->onDelete('cascade');

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
        Schema::dropIfExists('patient_privacy_contacts');
    }
}
