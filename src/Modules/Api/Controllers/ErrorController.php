<?php
/**
 * This file is part of the Zemit Framework.
 *
 * (c) Zemit Team <contact@zemit.com>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

namespace Zemit\Modules\Api\Controllers;

/**
 * Contrôleur pour les pages d'erreurs ou de codes http spécifiques
 * @author Julien Turbide <jturbide@nuagerie.com>
 */
class ErrorController extends AbstractController
{
    /**
     * Par défaut, on forward vers ErrorsController::fatalAction()
     * Page d'erreur fatale - 500 Internal Server Error
     * @see ErrorController::fatalAction();
     */
    public function indexAction()
    {
        $this->dispatcher->forward(array(
            'action' => 'notFound'
        ));
    }
    
    /**
     * Page d'erreur fatale - 500 Internal Server Error
     */
    public function fatalAction()
    {
        $this->response->setStatusCode(500, 'Internal Server Error');
    }
    
    /**
     * Page introuvable - 404 Not Found
     */
    public function notFoundAction()
    {
        $this->response->setStatusCode(404, 'Not Found');
    }
    
    /**
     * Page inaccessible - 403 Forbidden
     */
    public function forbiddenAction()
    {
        $this->response->setStatusCode(403, 'Forbidden');
    }
    
    /**
     * Accès non autorisé - 401 Unauthorized
     */
    public function unauthorizedAction()
    {
        $this->response->setStatusCode(401, 'Unauthorized');
    }
    
    /**
     * Mauvaise requête - 400 Bad Request
     */
    public function badRequestAction()
    {
        $this->response->setStatusCode(400, 'Bad Request');
    }
    
    /**
     * Service indisponible ou maintnance en cours - 503 Service Unavailable
     */
    public function maintenanceAction()
    {
        $this->response->setStatusCode(503, 'Service Unavailable');
    }
}