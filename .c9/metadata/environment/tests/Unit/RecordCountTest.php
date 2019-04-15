{"changed":true,"filter":false,"title":"RecordCountTest.php","tooltip":"/tests/Unit/RecordCountTest.php","value":"<?php\n\nnamespace Tests\\Unit;\n\nuse Tests\\TestCase;\nuse Illuminate\\Foundation\\Testing\\WithFaker;\nuse Illuminate\\Foundation\\Testing\\RefreshDatabase;\nuse App\\User;\n\nclass RecordCountTest extends TestCase\n{\n    /**\n     * A basic unit test example.\n     *\n     * @return void\n     */\n    public function testExample()\n    {\n        $userCount = 50;\n\t        $users = factory(User::class, 50)->create();\n\t        $this->assertEquals( $userCount, \\count( $users ) );\n    }\n}\n","undoManager":{"mark":3,"position":4,"stack":[[{"start":{"row":6,"column":50},"end":{"row":7,"column":0},"action":"insert","lines":["",""],"id":2}],[{"start":{"row":7,"column":0},"end":{"row":7,"column":13},"action":"insert","lines":["use App\\User;"],"id":3}],[{"start":{"row":18,"column":8},"end":{"row":18,"column":32},"action":"remove","lines":["$this->assertTrue(true);"],"id":4},{"start":{"row":18,"column":8},"end":{"row":21,"column":61},"action":"insert","lines":["$userCount = 50;","\t        $users = factory(User::class, 50)->create();","\t","\t        $this->assertEquals( $userCount, \\count( $users ) );"]}],[{"start":{"row":20,"column":0},"end":{"row":20,"column":1},"action":"remove","lines":["\t"],"id":5},{"start":{"row":19,"column":53},"end":{"row":20,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":9,"column":17},"end":{"row":9,"column":18},"action":"insert","lines":["T"],"id":6},{"start":{"row":9,"column":18},"end":{"row":9,"column":19},"action":"insert","lines":["e"]},{"start":{"row":9,"column":19},"end":{"row":9,"column":20},"action":"insert","lines":["s"]},{"start":{"row":9,"column":20},"end":{"row":9,"column":21},"action":"insert","lines":["t"]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":9,"column":21},"end":{"row":9,"column":21},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1555347816847}