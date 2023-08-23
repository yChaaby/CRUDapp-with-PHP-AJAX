<?php

class Point2D{
    private int $x;
    private int $y;
    public function __construct($x,$y){
        $this->x = $x;
        $this->y = $y;
    }
    public function getX(){
        return $this->x;
    }
    public function getY(){
        return $this->y;
    }
    public function setX($x):void{
        $this->x = $x;
    }
    public function setY($y):void{
        $this->y = $y;
    }
    public function __toString(){
        return sprintf("Point(x=%f,y=%f)", $this->x, $this->y);
    }
    public function bouger($dx,$dy){
        $this->x += $dx;
        $this->y += $dy;
    }
}
class Forme
{
    protected int $id;
    protected Point2D $centre;
    public static $counter = 0;
    public function __construct(Point2D $centre){
        $this->centre = $centre;
        $this->id = ++self::$counter;
    }
    public function surface(){

    }
    public function périmètre(){

    }
    public function bouger($dx,$dy){
        $this->centre->bouger($dx,$dy);
    }
}
class renctangle extends Forme {
    protected double $longueur;
    protected double $largeur;

    public function __construct(double $longueur,double $largeur, Point2D $centre){
        parent::__construct($centre);
        $this->longueur = $longueur;
        $this->largeur = $largeur;
    } 
    public function getLongueur(){
        return $this->longueur;
    }
    public function getLargeur(){
        return $this->largeur;
    }
    public function setLongueur($x):void{
        $this->longueur = $x;
    }
    public function setLargeur($y):void{
        $this->largeur = $y;
    }
    public function surface(){
        return $this->largeur * $this->longueur;
    }
    public function périmètre(){
        return 2 * ($this->longueur + $this->largeur);
    }
    public function __toString(){
        return sprintf("Rectangle :%d  \n
                        Centre:Point(x=2, y=3)\n
                        Largeur:1\n
                        Longueur:2\n
                        surface:2\n
                        perimetre:6",$this->id,);
    }

}



?>