<?php
namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller {
    
    public function index(){
        $empleados=Empleado::all();
        return view('empleados.index',compact('empleados'));
    }

    public function create(){
        return view('empleados.create');
    }

    public function store(Request $request){
        $request->validate([
            'nombre'=>'required',
            'cargo'=>'required',
            'salario'=>'required|numeric',
            'fecha_contratacion'=>'required|date',
        ]);
        
        $empleado=new Empleado();
        $empleado->nombre=$request->nombre;
        $empleado->cargo=$request->cargo;
        $empleado->salario=$request->salario;
        $empleado->fecha_contratacion=$request->fecha_contratacion;
        $empleado->save();
        
        return redirect()->route('empleados.index');
    }

    public function edit(Empleado $empleado){
        return view('empleados.edit',compact('empleado'));
    }

    public function update(Request $request, Empleado $empleado){
        $request->validate([
            'nombre'=>'required',
            'cargo'=>'required',
            'salario'=>'required|numeric',
            'fecha_contratacion'=>'required|date',
        ]);

        $empleado->nombre=$request->nombre;
        $empleado->cargo=$request->cargo;
        $empleado->salario=$request->salario;
        $empleado->fecha_contratacion=$request->fecha_contratacion;
        $empleado->save();

        return redirect()->route('empleados.index');
    }

    public function destroy(Empleado $empleado){
        $empleado->delete();
        return redirect()->route('empleados.index');
    }
}