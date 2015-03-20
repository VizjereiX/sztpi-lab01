<?php
/**
 * @Entity @Table(name="posts")
 **/
class Post {
    /** @Id @Column(type="integer") @GeneratedValue **/
    protected $id;
    /** @Column(type="string") **/
    protected $title;

	/**
	 * @return int 
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * @param string $title
	 * @return Post
	 */
	public function setTitle($title) {
		$this->title = $title;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getTitle() {
		return $this->title;
	}
	
}
