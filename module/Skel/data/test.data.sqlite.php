<?php
//array com os sqls usados para os testes do phpunit
return array(
    'post' => array(
        'create' => 'create table if not exists "post" (
                      "id" INTEGER PRIMARY KEY NOT NULL,
                      "title" varchar(100) NOT NULL,
                      "body" text NOT NULL,
                      "criado" timestamp NOT NULL
                    )',
        'drop' => "delete from post"
    ),
    'comment' => array(
        'create' => 'create table if not exists "comment" (
                      "id" integer primary key NOT NULL,
                      "post_id" smallint(6) NOT NULL,
                      "body" text NOT NULL,
                      "email" varchar(100) NOT NULL,
                      "criado" timestamp NOT NULL,
                      CONSTRAINT "fk_comment_post" FOREIGN KEY ("post_id") REFERENCES "post" ("id")
                    )',
        'drop' =>'delete from comment'
    ),
);
