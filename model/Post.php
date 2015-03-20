<?php
/**
 * @Entity @Table(name="posts")
 **/
class Post {
    /** @Id @Column(type="integer") @GeneratedValue **/
    protected $id;
    /** @Column(type="string") **/
    protected $title;
}
