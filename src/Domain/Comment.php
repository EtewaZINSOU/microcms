<?php
/**
 * Created by PhpStorm.
 * User: ALEXIS
 * Date: 22/02/15
 * Time: 12:59
 */

namespace microcms\Domain;


class Comment {
    /**
     * Comment id.
     * @var integer
     */
    private $id;

    /**
     * Comment author.
     * @var string
     */
    private $author;

    /**
     * Comment content.
     * @var integer
     */
    private $content;

    /**
     * Associated article.
     * @var \MicroCMS\Domain\Article
     */
    private $article;

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param string $author
     */
    public function setAuthor($author)
    {
        $this->author = $author;
    }

    /**
     * @return int
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param int $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    /**
     * @param \MicroCMS\Domain\Article $article
     */
    public function setArticle($article)
    {
        $this->article = $article;
    }

    /**
     * @return \MicroCMS\Domain\Article
     */
    public function getArticle()
    {
        return $this->article;
    }

} 