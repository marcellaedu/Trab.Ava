<?php
//Modelo para Avaliação
require_once(__DIR__ . "/Tipo.php");
require_once(__DIR__ . "/Genero.php");


class Avaliacao {

    private ?int $id;
    private ?string $nomePessoa;
    private ?string $nomeEntretenimento;
    private ?string $dataPublicacao;
    private ?Tipo $tipo;
    private ?Genero $genero;
    private ?string $ava;
   
 
    public function __construct() {
        $this->id = 0;
        $this->tipo = null;
        $this->genero = null;
    }


    /**
     * Get the value of id
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */
    public function setId(?int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of nomePessoa
     */
    public function getNomePessoa(): ?string
    {
        return $this->nomePessoa;
    }

    /**
     * Set the value of nomePessoa
     */
    public function setNomePessoa(?string $nomePessoa): self
    {
        $this->nomePessoa = $nomePessoa;

        return $this;
    }

    /**
     * Get the value of nomeEntretenimento
     */
    public function getNomeEntretenimento(): ?string
    {
        return $this->nomeEntretenimento;
    }

    /**
     * Set the value of nomeEntretenimento
     */
    public function setNomeEntretenimento(?string $nomeEntretenimento): self
    {
        $this->nomeEntretenimento = $nomeEntretenimento;

        return $this;
    }

    /**
     * Get the value of dataPublicacao
     */
    public function getDataPublicacao(): ?string
    {
        return $this->dataPublicacao;
    }

    /**
     * Set the value of dataPublicacao
     */
    public function setDataPublicacao(?string $dataPublicacao): self
    {
        $this->dataPublicacao = $dataPublicacao;

        return $this;
    }

    /**
     * Get the value of tipo
     */
    public function getTipo(): ?Tipo
    {
        return $this->tipo;
    }

    /**
     * Set the value of tipo
     */
    public function setTipo(?Tipo $tipo): self
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get the value of genero
     */
    public function getGenero(): ?Genero
    {
        return $this->genero;
    }

    /**
     * Set the value of genero
     */
    public function setGenero(?Genero $genero): self
    {
        $this->genero = $genero;

        return $this;
    }

    

    /**
     * Get the value of ava
     */
    public function getAva(): ?string
    {
        return $this->ava;
    }

    /**
     * Set the value of ava
     */
    public function setAva(?string $ava): self
    {
        $this->ava = $ava;

        return $this;
    }
}