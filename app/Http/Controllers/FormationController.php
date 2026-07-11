<?php

namespace App\Http\Controllers;
use App\Models\Categorie;
use App\Models\Formation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
class FormationController extends Controller
{
    //
    // public function showPublic()
    // {
    //     $formations = Formation::all();

    //     return view('pages.formation', compact('formations'));
    // }


    public function showPublic(Request $request)
    {
        $query = Formation::with('categorie');

        // Filtre par catégorie
        if ($request->filled('categorie')) {

            $query->whereHas('categorie', function ($q) use ($request) {

                $q->where('slug', $request->categorie);

            });

        }

        // Recherche
        if ($request->filled('search')) {

            $query->where(function ($q) use ($request) {

                $q->where('titre', 'like', '%' . $request->search . '%')
                ->orWhere('description', 'like', '%' . $request->search . '%');

            });

        }

        $formations = $query->latest()->paginate(9);

        // Toutes les catégories actives
        $categories = Categorie::where('actif', true)
                        ->orderBy('nom')
                        ->get();

        return view(
            'pages.formation',
            compact('formations', 'categories')
        );
    }


    public function details($slug)
    {
    $formation = Formation::where('slug', $slug)->firstOrFail();


    return view('pages.detailformation', compact('formation'));


    }



    public function index()
    {
        // $formations = Formation::all();
        $formations = Formation::latest()->paginate(12);

        return view('admin.formations.index', compact('formations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Categorie::where('actif',1)
                    ->orderBy('nom')
                    ->get();
        return view('admin.formations.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    
    public function store(Request $request)
    {
           $request->validate([
                'titre' => 'required',
                'categorie_id' => 'required',
                'description' => 'required',
                'programme' => 'nullable',
                'prix' => 'required',
                'duree' => 'required',
                'image' => 'nullable|image',
                'brochure' => 'nullable|mimes:pdf|max:10240'
            ]);
            $formations = new Formation();    
            if ($request->hasFile('image')) {
                $imagepath = $request->file('image')->store('formations', 'public');
                $formations->image = $imagepath;
            }
            if ($request->hasFile('brochure')) {

                $brochurePath = $request->file('brochure')
                                        ->store('brochures', 'public');

                $formations->brochure = $brochurePath;
            }

            $formations['phare'] = $request->has('phare');

            $formations -> titre = $request ->input('titre');
            $formations -> categorie_id = $request-> input('categorie_id');
            $formations -> description = $request -> input('description');
            $formations->  programme = $request-> input('programme');
            $formations -> prix = $request -> input('prix');
            $formations -> duree = $request -> input('duree');
            $formations->slug = Str::slug($request->titre);

            //$formations -> save();
            $result = $formations->save();
             

            return redirect()
                ->route('admin.formations.index')
                ->with('success', 'Formation créée');
    }

    /**
     * Display the specified resource.
     */
    public function show(Formation $formation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Formation $formation)
    {
        $categories = Categorie::where('actif',1)
                    ->orderBy('nom')
                    ->get();
        return view('admin.formations.edit', compact('formation', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Formation $formation)
    {
        $data = $request->validate([
            'titre' => 'required',
            'categorie_id' => 'required',
            'description' => 'required',
            'programme' => 'nullable',
            'prix' => 'required',
            'duree' => 'required',
            'image' => 'nullable|image',
            'brochure' => 'nullable|mimes:pdf|max:10240'
        ]);

        if ($request->hasFile('image')) {

            if ($formation->image) {
                Storage::disk('public')->delete($formation->image);
            }

            $data['image'] = $request->file('image')
                ->store('formations', 'public');
        }

        if ($request->hasFile('brochure')) {

            if ($formation->brochure) {
                Storage::disk('public')->delete($formation->brochure);
            }

            $data['brochure'] = $request->file('brochure')
                ->store('formations', 'public');
        }
        
        $data['phare'] = $request->has('phare');

        $formation->update($data);

        return redirect()
            ->route('admin.formations.index')
            ->with('success', 'Formation modifiée');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Formation $formation)
    {
            if ($formation->image) {
                Storage::disk('public')->delete($formation->image);
            }

            $formation->delete();

            return redirect()
                ->route('admin.formations.index')
            ->with('success', 'Formation supprimée');
    }
}
