<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(EstadosTableSeeder::class);
        $this->call(CidadesTableSeeder::class);
        $this->call(BebidasTableSeeder::class);
        $this->call(CardapiosTableSeeder::class);
        $this->call(CardapiosMomentosTableSeeder::class);
        $this->call(CardapiosOcasiaosTableSeeder::class);
        $this->call(ClienteCardapiosTableSeeder::class);
        $this->call(ClientesTableSeeder::class);
        $this->call(ClientesSiteTableSeeder::class);
        $this->call(EspecialidadesTableSeeder::class);
        $this->call(EstadoCivilsTableSeeder::class);
        $this->call(FontesTableSeeder::class);
        $this->call(FornecedorEspecialidadesTableSeeder::class);
        $this->call(FornecedoresSiteTableSeeder::class);
        $this->call(FornecedorsTableSeeder::class);
        $this->call(FornecedorsIngredientesTableSeeder::class);
        $this->call(GruposTableSeeder::class);
        $this->call(IngredienteBebidasTableSeeder::class);
        $this->call(IngredienteReceitasTableSeeder::class);
        $this->call(IngredientesTableSeeder::class);
        $this->call(MomentosTableSeeder::class);
        $this->call(MomentosReceitasTableSeeder::class);
        $this->call(OcasiaosTableSeeder::class);
        $this->call(OcasiaosReceitasTableSeeder::class);
        $this->call(ParceirosTableSeeder::class);
        $this->call(PeriodosTableSeeder::class);
        $this->call(ReceitaCardapiosTableSeeder::class);
        $this->call(ReceitasTableSeeder::class);
        $this->call(SexosTableSeeder::class);
        $this->call(TipoCardapiosTableSeeder::class);
        $this->call(TipoReceitasTableSeeder::class);
        $this->call(UnidadesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}
