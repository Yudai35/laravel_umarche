<x-tests.app>
    <x-slot name="header">ヘッダー１</x-slot>
    コンポーネントテスト１

    <x-tests.card title="タイトル1" content="本文1" :message="$message" />
    <x-tests.card />
    <x-tests.card title="css変更したい" class="bg-red-900" />

</x-tests.app>