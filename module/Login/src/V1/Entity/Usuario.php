<?php

namespace Login\V1\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usuario
 *
 * @ORM\Table(name="usuario", indexes={@ORM\Index(name="IDX_2265B05D4E0AC5DF", columns={"enderecoid"})})
 * @ORM\Entity
 */
class Usuario
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", precision=0, scale=0, nullable=false, unique=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=30, precision=0, scale=0, nullable=false, unique=false)
     */
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="cpf", type="string", length=11, precision=0, scale=0, nullable=false, unique=false)
     */
    private $cpf;

    /**
     * @var string
     *
     * @ORM\Column(name="telefone", type="string", length=15, precision=0, scale=0, nullable=false, unique=false)
     */
    private $telefone;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=30, precision=0, scale=0, nullable=false, unique=false)
     */
    private $email;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datanascimento", type="date", precision=0, scale=0, nullable=false, unique=false)
     */
    private $datanascimento;

    /**
     * @var string
     *
     * @ORM\Column(name="senha", type="string", length=6, precision=0, scale=0, nullable=false, unique=false)
     */
    private $senha;

    /**
     * @var \Login\V1\Entity\Endereco
     *
     * @ORM\ManyToOne(targetEntity="Login\V1\Entity\Endereco")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="enderecoid", referencedColumnName="id", nullable=true)
     * })
     */
    private $enderecoid;


    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nome.
     *
     * @param string $nome
     *
     * @return Usuario
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get nome.
     *
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set cpf.
     *
     * @param string $cpf
     *
     * @return Usuario
     */
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;

        return $this;
    }

    /**
     * Get cpf.
     *
     * @return string
     */
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * Set telefone.
     *
     * @param string $telefone
     *
     * @return Usuario
     */
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;

        return $this;
    }

    /**
     * Get telefone.
     *
     * @return string
     */
    public function getTelefone()
    {
        return $this->telefone;
    }

    /**
     * Set email.
     *
     * @param string $email
     *
     * @return Usuario
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email.
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set datanascimento.
     *
     * @param \DateTime $datanascimento
     *
     * @return Usuario
     */
    public function setDatanascimento($datanascimento)
    {
        $this->datanascimento = $datanascimento;

        return $this;
    }

    /**
     * Get datanascimento.
     *
     * @return \DateTime
     */
    public function getDatanascimento()
    {
        return $this->datanascimento;
    }

    /**
     * Set senha.
     *
     * @param string $senha
     *
     * @return Usuario
     */
    public function setSenha($senha)
    {
        $this->senha = $senha;

        return $this;
    }

    /**
     * Get senha.
     *
     * @return string
     */
    public function getSenha()
    {
        return $this->senha;
    }

    /**
     * Set enderecoid.
     *
     * @param \Login\V1\Entity\Endereco|null $enderecoid
     *
     * @return Usuario
     */
    public function setEnderecoid(\Login\V1\Entity\Endereco $enderecoid = null)
    {
        $this->enderecoid = $enderecoid;

        return $this;
    }

    /**
     * Get enderecoid.
     *
     * @return \Login\V1\Entity\Endereco|null
     */
    public function getEnderecoid()
    {
        return $this->enderecoid;
    }
}
