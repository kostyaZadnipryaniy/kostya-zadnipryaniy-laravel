<?php
namespace App\Http\Utils;
class ClientsUtil  {

// - метод который получает массив проектов для клиента.

public function index($id)
    {
        $project = Project::all()->where('$client->id' '=' '$id');
        dd($project)
    }
// - метод для добавления проекта (параметры Клиент (екземпляр модели клиента)
// и массив параметров для добавления нового проекта) метод проверяет, что если у клиента
//  уже есть 10 проектов, то не дает добавить новый.

 public function add($id)
{
    
}
//  - метод для удаления проекта (принимает клиента, и экземпляр проекта),
//   метод не позволяет удалить проект, если это последний проект у клиента.

  public function destroy(Project $project)
    {

        if()
        $project->delete();
    }
}
