<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // Lista de posts
    public function index()
    {
        $posts = Post::with('user')->latest()->get();
        return view('US-Guias', compact('posts'));
    }

    // Guardar post
    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required',
            'contenido' => 'required',
        ]);

        $post = Post::create([
            'titulo' => $request->titulo,
            'contenido' => $request->contenido,
            'user_id' => auth()->id()
        ]);

        return redirect()->route('guias')
            ->with([
                'success' => 'Publicación creada correctamente.',
                'post_id' => $post->id
            ]);
    }

    // Actualizar post
    public function update(Request $request, $id)
    {
        $request->validate([
            'titulo' => 'required',
            'contenido' => 'required',
        ]);

        $post = Post::findOrFail($id);

        // Verificar que el usuario sea el dueño del post
        if(auth()->id() !== $post->user_id) {
            abort(403, 'No autorizado');
        }

        $post->update([
            'titulo' => $request->titulo,
            'contenido' => $request->contenido,
        ]);

        return redirect()->route('guias')
            ->with([
                'success' => 'Publicación actualizada correctamente.',
                'post_id' => $post->id
            ]);
        
    }
    

    // Eliminar post
    public function destroy($id)
    {
        $post = Post::findOrFail($id);

        if ($post->user_id !== auth()->id()) {
            return redirect()->route('guias')->with('error', 'No puedes eliminar esta publicación.');
        }

        $post->delete();

        return redirect()->route('guias')->with('success', 'Publicación eliminada correctamente.');
    }
}
