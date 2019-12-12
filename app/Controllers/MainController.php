<?php 
//*********************************************** */
// MainController
//*********************************************** */
namespace Dashboard\Controllers;

class MainController extends CoreController {
    // homePage
    public function homeAction() {
        $viewVars = [
            'title' => 'Home'
        ];
        $this->show('home', $viewVars);
    }

    public function astucesAction() {
        $viewVars = [
            'title' => 'Astuces'
        ];
        $this->show('astuces', $viewVars);
    }

    public function phpAction() {
        $viewVars = [
            'title' => 'PHP'
        ];
        $this->show('php', $viewVars);
    }

    public function jsAction() {
        $viewVars = [
            'title' => 'JS'
        ];
        $this->show('js', $viewVars);
    }

    public function shortcutsAction() {
        $viewVars = [
            'title' => 'Shortcuts'
        ];
        $this->show('shortcuts', $viewVars);
    }

    public function planningAction() {
        $viewVars = [
            'title' => 'Planning'
        ];
        $this->show('planning', $viewVars);
    }

    public function challengeAction() {
        $viewVars = [
            'title' => 'Challenges'
        ];
        $this->show('challenge', $viewVars);
    }

    public function contactAction() {
        $viewVars = [
            'title' => 'Contact'
        ];
        $this->show('contact', $viewVars);
    }
}