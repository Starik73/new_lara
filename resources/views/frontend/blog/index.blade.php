<x-site-layout>
    <pre>
    @foreach ($blogs as $blog)
        {{ ($blog->content->post_body) }}
        <br>
    @endforeach
    </pre>
</x-site-layout>
