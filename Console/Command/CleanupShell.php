<?php
class CleanupShell extends AppShell {
	public $uses = array('Attempt.Attempt');

	public function main() {
		$this->Attempt->cleanup();
		$this->out('Cleaning attempt table');
	}
}