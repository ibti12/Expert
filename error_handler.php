<?php

// Fonction principale pour gérer une requête
function handleRequest() {
    try {
        // Simuler une fonction qui peut lancer des exceptions
        simulateFunction();
    } catch (Exception $e) {
        handleException($e);
    }
}

// Simulation d'une fonction qui peut lancer des exceptions
function simulateFunction() {
    // Lancer une exception pour tester la gestion des erreurs
    throw new Exception("Erreur de simulation");
}

// Fonction pour gérer les exceptions
function handleException($exception) {
    // Journaliser l'erreur
    logError($exception);

    // Afficher un message convivial pour l'utilisateur
    showFriendlyErrorMessage();

    // Notifier l'équipe de support
    notifySupportTeam($exception);
}

// Fonction pour journaliser les erreurs
function logError($exception) {
    error_log($exception->getMessage());
}

// Fonction pour afficher un message convivial pour l'utilisateur
function showFriendlyErrorMessage() {
    echo "Une erreur inattendue est survenue. Veuillez réessayer plus tard.";
}

// Fonction pour notifier l'équipe de support
function notifySupportTeam($exception) {
    $to = "support@example.com";
    $subject = "Erreur critique survenue";
    $message = "Détails de l'erreur:\n" . $exception->getMessage();
    mail($to, $subject, $message);
}

// Fonction pour gérer les erreurs spécifiques
function handleSpecificError($errorCode) {
    switch ($errorCode) {
        case 502:
            echo "Erreur de passerelle. Veuillez réessayer plus tard.";
            break;
        case 500:
            echo "Erreur interne du serveur. Veuillez réessayer plus tard.";
            break;
        case 504:
            echo "Délai d'attente de la passerelle dépassé. Veuillez réessayer plus tard.";
            break;
        case 413:
            echo "La demande est trop grande. Veuillez réduire la taille des données.";
            break;
        case 429:
            echo "Trop de demandes. Veuillez réessayer plus tard.";
            break;
        case 403:
            echo "Accès refusé. Veuillez vérifier vos autorisations.";
            break;
        case 404:
            echo "Ressource non trouvée. Veuillez vérifier l'URL.";
            break;
        default:
            echo "Une erreur inattendue est survenue. Veuillez réessayer plus tard.";
    }
}

// Exemple d'utilisation de la fonction handleSpecificError
function simulateRequestWithErrorCode($errorCode) {
    try {
        // Simuler une requête qui génère un code d'erreur spécifique
        throw new Exception("Erreur simulée avec le code $errorCode", $errorCode);
    } catch (Exception $e) {
        handleSpecificError($e->getCode());
    }
}

// Appeler la fonction principale pour gérer la requête
handleRequest();

// Simuler des requêtes avec différents codes d'erreur
simulateRequestWithErrorCode(502);
simulateRequestWithErrorCode(500);
simulateRequestWithErrorCode(504);
simulateRequestWithErrorCode(413);
simulateRequestWithErrorCode(429);
simulateRequestWithErrorCode(403);
simulateRequestWithErrorCode(404);

?>
