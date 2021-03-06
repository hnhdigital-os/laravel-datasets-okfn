<?php

namespace Bluora\LaravelDatasetsOkfn\Migrations;

use DB;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataOkfnCountryCodesTable extends Migration
{
    protected $table_name = 'data_okfn_country_codes';
    protected $connection = 'default';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up($connection = null)
    {
        Schema::connection(!is_null($connection) ? $connection : $this->connection)->create($this->table_name, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 255)->default('');
            $table->string('official_name_en', 255)->default('');
            $table->string('official_name_fr', 255)->default('');
            $table->string('iso3166_1_alpha_2', 2)->default('');
            $table->string('iso3166_1_alpha_3', 3)->default('');
            $table->string('iso3166_1_numeric', 3)->default('');
            $table->string('itu', 3)->default('');
            $table->string('marc', 14)->default('');
            $table->string('ds', 3)->default('');
            $table->string('wmo', 2)->default('');
            $table->string('dial', 25)->default('');
            $table->string('fifa', 15)->default('');
            $table->string('fips', 255)->default('');
            $table->string('gual', 6)->default('');
            $table->string('ioc', 3)->default('');
            $table->string('iso4217_currency_alphabetic_code', 3)->default('');
            $table->string('iso4217_currency_country_name', 100)->default('');
            $table->integer('iso4217_currency_minor_unit');
            $table->string('iso4217_currency_name', 255)->default('');
            $table->integer('iso4217_currency_numeric_code');
            $table->string('is_independent', 100)->default('');
            $table->string('capital', 100)->default('');
            $table->string('continent', 2)->default('');
            $table->string('tld', 3)->default('');
            $table->string('languages', 255)->default('');
            $table->integer('geonameid')->default(0);
            $table->string('edgar', 2)->default('');
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
            $table->timestamp('archived_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down($connection = null)
    {
        Schema::connection(!is_null($connection) ? $connection : $this->connection)->drop($this->table_name);
    }
}
