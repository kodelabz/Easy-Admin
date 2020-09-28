<?php
namespace EasyView\EasyView\Core\Viewable\Components;




class FormBuilder
{
    private $fields;


    protected $presentedField;

    protected $types = [
      'bigint unsigned' => 'number',
      'varchar' => 'text',
      'timestamp' => 'date',
    ];

    public function __construct($fields)
    {
        $this->fields = $fields;
        $this->castToEasy();
    }

    public function castToEasy(){
        foreach ($this->fields as $field){
            $type = $this->cast($field->Type);
            if ($field->Field == "password"){
                $type = "password";
            }
            $this->presentedField[] = new Field(
                $field->Field,
                $type,
                $field->Null == "NO" ? false : true,
                $field->Key,
                $field->Default,
                $field->Extra
            );
        }
    }

    private function cast($type){
        list($str) = explode('(', $type);
        $type = isset($this->types[$str]) ?  $this->types[$str] : $type;
        return $type;
    }

    public function getFields()
    {
        return $this->presentedField;
    }
}
