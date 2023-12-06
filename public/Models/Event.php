<?php
namespace App\Models;
use App\Core\DB;

class Event extends DB
{
    private int $id_event;
    private string $event_date;
    private string $place;
    private string $event_name;
    private string $updated_at;
    private string $slug;

    public function __construct()
    {
        parent::__construct();
        $this->table = "EVENEMENT"; // Définition du nom de la table
    }

    // Méthodes getters et setters pour les attributs

    public function getIdEvent(): int
    {
        return $this->id_event;
    }

    public function setIdEvent(int $id_event): void
    {
        $this->id_event = $id_event;
    }

    public function getEventDate(): string
    {
        return $this->event_date;
    }

    public function setEventDate(string $event_date): void
    {
        $this->event_date = $event_date;
    }

    public function getPlace(): string
    {
        return $this->place;
    }

    public function setPlace(string $place): void
    {
        $this->place = $place;
    }

    public function getEventName(): string
    {
        return $this->event_name;
    }

    public function setEventName(string $event_name): void
    {
        $this->event_name = $event_name;
    }

    public function getUpdatedAt(): string
    {
        return $this->updated_at;
    }

    public function setUpdatedAt(string $updated_at): void
    {
        $this->updated_at = $updated_at;
    }

    public function getSlug(): string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): void
    {
        $this->slug = $slug;
    }

    // Méthodes spécifiques pour interagir avec la table EVENEMENT

    // Exemple : Récupérer un événement par son ID
    public function getEventById(int $id): ?Event
    {
        $data = $this->getOneBy(["ID_EVENT" => $id], "object");
        return $data; // Retourne un objet Event ou null s'il n'existe pas
    }

    // Autres méthodes pour manipuler les événements en base de données

    
}
