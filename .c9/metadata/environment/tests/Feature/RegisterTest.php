{"filter":false,"title":"RegisterTest.php","tooltip":"/tests/Feature/RegisterTest.php","undoManager":{"mark":0,"position":0,"stack":[[{"start":{"row":0,"column":0},"end":{"row":22,"column":0},"action":"remove","lines":["<?php","","namespace Tests\\Feature;","","use Tests\\TestCase;","use Illuminate\\Foundation\\Testing\\WithFaker;","use Illuminate\\Foundation\\Testing\\RefreshDatabase;","","class RegisterTest extends TestCase","{","    /**","     * A basic feature test example.","     *","     * @return void","     */","    public function testExample()","    {","        $response = $this->get('/');","","        $response->assertStatus(200);","    }","}",""],"id":2},{"start":{"row":0,"column":0},"end":{"row":17,"column":1},"action":"insert","lines":["<?php","namespace Tests\\Feature;","use Tests\\TestCase;","use Illuminate\\Foundation\\Testing\\WithFaker;","use Illuminate\\Foundation\\Testing\\RefreshDatabase;","class RegisterTest extends TestCase","{","    /**","     * A basic feature test example.","     *","     * @return void","     */","    public function testExample()","    {","        $response = $this->get('/register');","        $response->assertStatus(200);","    }","}"]}]]},"ace":{"folds":[],"scrolltop":140.5,"scrollleft":0,"selection":{"start":{"row":17,"column":1},"end":{"row":17,"column":1},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1555274295924,"hash":"a78cd75c52562dbc0fcde4f81b8318df7f021403"}