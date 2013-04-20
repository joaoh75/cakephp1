<?php
App::uses('AppController', 'Controller');
/**
 * Inscritos Controller
 *
 * @property Inscrito $Inscrito
 */
class InscritosController extends AppController {

	public function inscrever() {
	$isPost = $this->request->is('post');
	// Se é um POST e recebemos dados do formulário
		if ($isPost && !empty($this->request->data)) {
		// Tenta salvar os dados da inscrição
			if ($this->Inscrito->save($this->request->data)) {
			// Registro inserido com sucesso!				
				$this->redirect(array('controller' => 'pages', 'action' => 'display', 'inscricao'));
			} 
			else {
				$this->Session->setFlash(__('Erro na inscrição.'));
				}
			
		}
	}
}
