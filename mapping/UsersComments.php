<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * UsersComments
 *
 * @ORM\Table(name="users_comments", indexes={@ORM\Index(name="fk_users_comments_users", columns={"id_user"})})
 * @ORM\Entity
 */
class UsersComments
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="text", type="string", length=255, nullable=true)
     */
    private $text;

    /**
     * @var \Users
     *
     * @ORM\ManyToOne(targetEntity="Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_user", referencedColumnName="id")
     * })
     */
    private $idUser;


}
