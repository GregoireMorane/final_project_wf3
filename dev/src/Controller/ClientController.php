<?php

namespace Controller;

use DateTime;
use Entity\Client;
use Html2pdf\PDF_HTML;
use Symfony\Component\HttpFoundation\Response;

class ClientController extends ControllerAbstract{
    
    public function listAction() {
        $client = $this->app['user.manager']->getUser();
        $collectors = $this->app['collector.repository']->findCollectorByClientId($client->getIdClient());       
        $lieux = $this->app['lieucollecte.repository']->findLieuCollecteByClientId($client->getIdClient());
        $collectionDates = $this->app['collecte.repository']->findCollectionDateByClientId($client->getIdClient());
        $date = new DateTime();
        $currentWeekBioWasteWeight = $this->app['collecte.repository']->findCurrentWeekBioWasteWeightByClientId($client->getIdClient(), $date);
        $totalBioWasteWeight = $this->app['collecte.repository']->findTotalBioWasteWeightByClientId($client->getIdClient());

        return $this->render('compteclient.html.twig', 
                        [
                            'collectionDates' => $collectionDates,
                            'collectors' => $collectors,
                            'lieux' => $lieux,
                            'currentWeekBioWasteWeight' => $currentWeekBioWasteWeight,
                            'totalBioWasteWeight' => $totalBioWasteWeight,
                        ]);
    }

    public function editOneDacDetails($id_dac) {
        $client = $this->app['user.manager']->getUser();
        $oneDacDetails = $this->app['collecte.repository']->findOneDacDetails($client->getIdClient(), $id_dac);
        
        return $this->render('compteclientdac.html.twig', 
                [
                    'oneDacDetails' => $oneDacDetails
                ]
        );
    }

    public function editOneDacDetailsToPDF($id_dac) {
        $client = $this->app['user.manager']->getUser();
        $oneDacDetails = $this->app['collecte.repository']->findOneDacDetails($client->getIdClient(), $id_dac);
        
        $html = $this->render('compteclientdacpdf.html.twig', 
                [
                    'oneDacDetails' => $oneDacDetails
                ]
        );
        
        require(__DIR__ . '/../Html2pdf/html2pdf.php');
        
        $pdf= new PDF_HTML();
        $pdf->SetFont('Arial','',12);
        $pdf->AddPage();
        $pdf->WriteHTML(mb_convert_encoding($html, 'iso-8859-15'));

        $response = new Response($pdf->Output());
        $response->headers->set('Content-Type', 'application/pdf');
        
        return $response;
    } 

    public function registerAction() {
        $client = new Client();
        $errors = [];
        
        if(!empty($_POST)){

            $this->sanitizePost();
            
            $client->setFirstname($_POST['firstname'])
                   ->setLastname($_POST['lastname'])
                   ->setEmail($_POST['email'])
                   ->setStartDateContract($_POST['start_date_contract'])
                   ->setPhoneNumber($_POST['phone_number'])
                   ->setBillingAddress($_POST['billing_address'])
                   ->setPostalCode($_POST['postal_code'])
                   ->setCity($_POST['city'])
                   ->setCountry($_POST['country'])
                   ->setIsActive($_POST['is_active'])
                   ->setCompany($_POST['company'])
                   ->setSiret($_POST['siret'])
                   ->setPassword($_POST['password'])
                    ;

            if(empty($_POST['company'])){
                $errors['company'] = "Le nom de la société est obligatoire";
            }

            if(empty($_POST['start_date_contract'])){
                $errors['start_date_contract'] = "La date de début de contrat est obligatoire";
            }

            if(empty($_POST['siret'])){
                $errors['siret'] = "Le numéro de siret est obligatoire";
            }
            
            if(empty($_POST['lastname'])){
                $errors['lastname'] = "Le nom est obligatoire";
            }
            
            if(empty($_POST['firstname'])){
                $errors['firstname'] = "Le prenom est obligatoire";
            }
            
            if(empty($_POST['email'])){
                $errors['email'] = "L'email est obligatoire";
            }elseif(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
                $errors['email'] = "L'email n'est pas valide";
            }

            if(empty($_POST['password'])){
                $errors['password'] = "Le mot de passe est obligatoire";
            }elseif(!preg_match("/^[a-zA-Z0-9_-]{6,20}$/", $_POST['password'])){
                $errors['password'] = "Le mot de passe doit faire entre 6 et 20 caractères et ne doit contenir que des lettres, des chiffres ou des caractères _ et -";
            }

            if(empty($_POST['password_confirm'])){
                $errors['password_confirm'] = "La confirmation du mot de passe est obligatoire";
            }elseif($_POST['password'] != $_POST['password_confirm']){
                $errors['password_confirm'] = "La confirmation du mot de passe n'est pas identique au mot de passe.";
            }
            
            if(empty($_POST['phone_number'])){
                $errors['phone_number'] = "Le numéro de téléphone est obligatoire";
            }
            
            if(empty($_POST['billing_address'])){
                $errors['billing_address'] = "l'adresse de facturation est est obligatoire";
            }
            
            if(empty($_POST['postal_code'])){
                $errors['postal_code'] = "Le code postal est obligatoire";
            }
            
            if(empty($_POST['city'])){
                $errors['city'] = "La ville est obligatoire";
            }
            
            if(empty($_POST['country'])){
                $errors['country'] = "Le pays est obligatoire";
            }
            
            if(empty($errors)){
                //$client->setPassword($this->app['user.manager']->encodePassword($_POST['password']));
                $this->app['client.repository']->save($client);
                $message = '<strong>L\'utilisateur à bien été enregistré</strong>';
                $this->addFlashMessage($message, 'success');
                return $this->redirectRoute('connexion');
            }else{
                $message = '<strong>Le formulaire contient des erreurs</strong>';
                $message .= '<br>'.implode('<br>', $errors);
                $this->addFlashMessage($message, 'error');
            }
        }
        return $this->render(
            'admin/formulaireClient.html.twig',
            [
                'client' => $client
            ]
        );
    }
    
    public function editAction($id = null){
        if(is_null($id)){
            $client = new Client();
        }
        else{
            $client = $this->app['client.repository']->find($id);
            
            if(is_null($client)){
                $this->app->abort(404);
            }
        }
        
        $errors = [];
        if(!empty($_POST)){
            $client->setFirstname($_POST['firstname'])
                   ->setLastname($_POST['lastname'])
                   ->setEmail($_POST['email'])
                   ->setStartDateContract($_POST['start_date_contract'])
                   ->setPhoneNumber($_POST['phone_number'])
                   ->setBillingAddress($_POST['billing_address'])
                   ->setPostalCode($_POST['postal_code'])
                   ->setCity($_POST['city'])
                   ->setCountry($_POST['country'])
                   ->setIsActive($_POST['is_active'])
                   ->setCompany($_POST['company'])
                   ->setSiret($_POST['siret'])
                   ->setPassword($_POST['password'])
                    ;
            if(empty($_POST['company'])){
                $errors['company'] = "Le nom de la société est obligatoire";
            }

            if(empty($_POST['start_date_contract'])){
                $errors['start_date_contract'] = "La date de début de contrat est obligatoire";
            }

            if(empty($_POST['siret'])){
                $errors['siret'] = "Le numéro de siret est obligatoire";
            }
            
            if(empty($_POST['lastname'])){
                $errors['lastname'] = "Le nom est obligatoire";
            }
            
            if(empty($_POST['firstname'])){
                $errors['firstname'] = "Le prenom est obligatoire";
            }
            
            if(empty($_POST['email'])){
                $errors['email'] = "L'email est obligatoire";
            }elseif(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
                $errors['email'] = "L'email n'est pas valide";
            }

            if(empty($_POST['password'])){
                $errors['password'] = "Le mot de passe est obligatoire";
            }elseif(!preg_match("/^[a-zA-Z0-9_-]{6,20}$/", $_POST['password'])){
                $errors['password'] = "Le mot de passe doit faire entre 6 et 20 caractères et ne doit contenir que des lettres, des chiffres ou des caractères _ et -";
            }

            if(empty($_POST['password_confirm'])){
                $errors['password_confirm'] = "La confirmation du mot de passe est obligatoire";
            }elseif($_POST['password'] != $_POST['password_confirm']){
                $errors['password_confirm'] = "La confirmation du mot de passe n'est pas identique au mot de passe.";
            }
            
            if(empty($_POST['phone_number'])){
                $errors['phone_number'] = "Le numéro de téléphone est obligatoire";
            }
            
            if(empty($_POST['billing_address'])){
                $errors['billing_address'] = "l'adresse de facturation est est obligatoire";
            }
            
            if(empty($_POST['postal_code'])){
                $errors['postal_code'] = "Le code postal est obligatoire";
            }
            
            if(empty($_POST['city'])){
                $errors['city'] = "La ville est obligatoire";
            }
            
            if(empty($_POST['country'])){
                $errors['country'] = "Le pays est obligatoire";
            }
            
            if(empty($errors)){
                //$client->setPassword($this->app['user.manager']->encodePassword($_POST['password']));
                $this->app['client.repository']->save($client);
                $message = '<strong>L\'utilisateur à bien été mis à jour</strong>';
                $this->addFlashMessage($message, 'success');
                return $this->redirectRoute('connexion');
            }else{
                $message = '<strong>Le formulaire contient des erreurs</strong>';
                $message .= '<br>'.implode('<br>', $errors);
                $this->addFlashMessage($message, 'error');
            }
        }
        return $this->render(
            'admin/formulaireClient.html.twig',
            [
                'client' => $client
            ]
        );
    }
}
