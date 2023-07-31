<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\fatora;
class AddTask extends Controller
{
    public function AddTask(Request $request)
    {
        $request->validate([
            'phoneNumber' =>'required|unique:Tasks,phoneNumber',
        ]);
        $task=new Task();
        $task->phoneNumber=$request->input('phoneNumber');
        $task->save();
        return redirect('/ShowFiles');
        

    }
    function search(Request $request)
    {
    $output="";
      

     $tasks=Task::where('phoneNumber','Like','%'.$request->search.'%')->get();

foreach($tasks as $task)
{  $sumAmount = fatora::where('task_id',$task->id )->sum('price');
   $sumResult = fatora::where('task_id',$task->id )->sum('amount_paid');
   $total= $sumAmount - $sumResult;
   $task->total= $total;

   $task->save();

  
    $output.=
    '<tr>
    <td> '.$task->phoneNumber.'</td>
    <td> '.$task->total.'</td>
    <td> '.'
 <a href="/AddFatora/'.$task->id.'" class="btn btn-soft-danger" type="submit">'.'انشاء فاتورة
 </a>
 </td>'.'
 <td> '.'
 <a href="/showfatora/'.$task->id.'" class="btn btn-soft-danger" type="submit">'.'عرض التفاصيل
 </a>
 </td>'.'
 
    </tr>';
}
    return response($output);
}
public function AddFatora(Request $request,$id)
    {
     
        $fatora=new fatora();
        $fatora->name=$request->input('name');
        $fatora->type=$request->input('type');
        $fatora->type_customer=$request->input('type_customer');
        $fatora->glasses=$request->input('glasses');
        $fatora->type_glasses=$request->input('type_glasses');
        $fatora->recive=$request->input('recive');
        $fatora->price=$request->input('price');
        $fatora->amount_paid=$request->input('amount_paid');
        $fatora->remaining_amount=$request->input('remaining_amount');
        $fatora->task_id=$id;
        $fatora->save();
     
        return back()->withInput();

    }
    public function showdetails($id)
    {
        $task=Task::find($id);
        $tasks=$task->fatora;
        
        return view('ShowDetails',['tasks'=>$tasks]);

    }
    public function ShowFiles()
    {
        $files=Task::all();
        foreach($files as $file)
           {  $sumAmount = fatora::where('task_id',$file->id )->sum('price');
              $sumResult = fatora::where('task_id',$file->id )->sum('amount_paid');
              $total= $sumAmount - $sumResult;
              $file->total= $total;
              $file->save();
           }
        return view('Show-Files',['files'=>$files]);

    }



    public function delete_fatora($id)
    { $fatora=fatora::find($id);
        $fatora->delete();
    }


    public function edit_fatora($id)
    { $fatora=fatora::find($id);
      return view('EditFatora',['fatora'=>$fatora]);
    }


    public function editFatora(Request $request,$id)
    {   
        $fatora=fatora::find($id);
        $fatora->name=$request->input('name');
        $fatora->type=$request->input('type');
        $fatora->type_customer=$request->input('type_customer');
        $fatora->glasses=$request->input('glasses');
        $fatora->type_glasses=$request->input('type_glasses');
        $fatora->recive=$request->input('recive');
        $fatora->price=$request->input('price');
        $fatora->amount_paid=$request->input('amount_paid');
        $fatora->remaining_amount=$request->input('remaining_amount');
        $fatora->save();
        $task=$fatora->task->id;
        $task=Task::find($task);
        $tasks=$task->fatora;
        
        return view('ShowDetails',['tasks'=>$tasks]);
       

      
    }



}

