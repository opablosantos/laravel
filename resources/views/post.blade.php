<x-layout>
    <article>
        <h1><?= $post->title; ?></h1>

        <p>
            By <a href="#">Pablo Santos</a> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
        </p>

    <div>
        <p><?= $post->body; ?></p>
    </div>
    </article>

    <a href="/">Go Back</a>
</x-layout>
{{-- Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam aliquam dolorum, blanditiis vero eum voluptates hic tenetur non quam atque odit provident. Id molestias cumque tenetur animi, aut eos soluta. --}}