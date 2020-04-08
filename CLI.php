<?php 

	class AppCLI
	{

		private $commands = [];		



		public function run($input)
		{
			$commands = $this->commands;

			foreach ($commands as $command) {
				if ($command['command'] == $input[1]) {
					return call_user_func($command['action']);
					$action = explode('@', $command['action']);
					return $action;
					return call_user_func($action);
				}
			}
				
		}


		public function crateCommand($command, $action)
		{

			$this->commands[] = [
				'command'=>$command,
				'action' =>$action
				// 'controller'=> $controller,
				// 'method'=> $method
			];
		}
	}

 ?>