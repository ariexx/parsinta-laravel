<x-app title="Contact">
    <form action="/contact/store" method="post">
        @csrf

        <button type="submit">Kirim</button>
    </form>
</x-app>
