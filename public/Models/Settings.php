<?php
namespace App\Models;
use App\Core\DB;

class Settings extends DB
{
    private int $id_settings;
    private string $parametre;
    private string $valeur;
    private string $updated_at;

    public function __construct()
    {
        parent::__construct();
        $this->table = "SETTINGS"; // Définition du nom de la table
    }

    // Méthodes getters et setters pour les attributs

    public function getIdSettings(): int
    {
        return $this->id_settings;
    }

    public function setIdSettings(int $id_settings): void
    {
        $this->id_settings = $id_settings;
    }

    public function getParametre(): string
    {
        return $this->parametre;
    }

    public function setParametre(string $parametre): void
    {
        $this->parametre = $parametre;
    }

    public function getValeur(): string
    {
        return $this->valeur;
    }

    public function setValeur(string $valeur): void
    {
        $this->valeur = $valeur;
    }

    public function getUpdatedAt(): string
    {
        return $this->updated_at;
    }

    public function setUpdatedAt(string $updated_at): void
    {
        $this->updated_at = $updated_at;
    }

    // Méthodes spécifiques pour interagir avec la table SETTINGS

    // Exemple : Récupérer un paramètre par son ID
    public function getSettingsById(int $id): ?Settings
    {
        $data = $this->getOneBy(["ID_SETTINGS" => $id], "object");
        return $data; // Retourne un objet Settings ou null s'il n'existe pas
    }

    
}
