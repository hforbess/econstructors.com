<?PHP
    namespace Forbess\ArticlesBundle\Document;
    use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
    class Article
    {
        protected $title;
        protected $teaser;
        protected $content;
        protected $date_entered;
   
       /**
     * @var MongoId $id
     */
    protected $id;


    /**
     * Get id
     *
     * @return id $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return self
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Get title
     *
     * @return string $title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set teaser
     *
     * @param string $teaser
     * @return self
     */
    public function setTeaser($teaser)
    {
        $this->teaser = $teaser;
        return $this;
    }

    /**
     * Get teaser
     *
     * @return string $teaser
     */
    public function getTeaser()
    {
        return $this->teaser;
    }

    /**
     * Set dateEntered
     *
     * @param timestamp $dateEntered
     * @return self
     */
    public function setDateEntered($dateEntered)
    {
        $this->date_entered = $dateEntered;
        return $this;
    }
     
    /**
     * Set Content 
     *
     * @return text $oontent
     */
    public function setContent( $content )
    {
    
       $this->content = $content;

       return $this;
    }

    /**
     * Get Content 
     *
     * @return text $oontent
     */
    public function getContent()
    {
        return $this->content;
    }




    /**
     * Get dateEntered
     *
     * @return timestamp $dateEntered
     */
    public function getDateEntered()
    {
        return $this->date_entered;
    }
}
