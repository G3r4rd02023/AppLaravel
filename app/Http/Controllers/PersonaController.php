use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PersonaController extends Controller
{
    public function index(){
        $personas = HTTP::get('http://localhost:3000/personas');
        $personasArray = $personas->json();
        return View('personas.index',compact('personasArray'));
    }

    public function create()
    {
        return view('personas.create');
    }

    public function store(Request $request)
    {
        $response = Http::post('http://localhost:3000/personas', [
            'COD_PERSONA' => $request->input('COD_PERSONA'),
            'IDENTIDAD' => $request->input('IDENTIDAD'),
            'NOM_PERSONA' => $request ->input('NOM_PERSONA'),
            'GEN_PERSONA' => $request ->input('GEN_PERSONA'),
            'IND_CIVIL' => $request ->input('IND_CIVIL'),
            'EDA_PERSONA' => $request ->input('EDA_PERSONA'),
            'IND_PERSONA' => $request ->input('IND_PERSONA'),
            'USR_REGISTRO' => $request ->input('USR_REGISTRO'),
            'FEC_REGISTRO' => $request ->input('FEC_REGISTRO'),
            // ... resto de los campos ...
        ]);

        // Verificar la respuesta de la API y manejarla según sea necesario

        return redirect()->route('personas.index')->with('success', 'Registro creado exitosamente');
    }
}
