<div>


    <div class="relative overflow-x-auto bg-neutral-primary-soft shadow-xs rounded-base border border-default">
        <table class="w-full text-sm text-left rtl:text-right text-body">
            <thead class="bg-neutral-secondary-soft border-b border-default">
                <tr>
                    @foreach ($header as $title)
                        <th scope="col" class="px-6 py-3 font-medium">
                            {{ $title }}
                        </th>
                    @endforeach
                </tr>
            </thead>
            <tbody>
                @foreach ($content as $item)
                    <tr class="odd:bg-neutral-primary even:bg-neutral-secondary-soft border-b border-default">
                        <th scope="row" class="px-6 py-4 font-medium text-heading whitespace-nowrap">
                            {{ $item['id'] }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $item['title'] }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $item['status'] }}
                        </td>
                        <td class="px-6 py-4">

                            <a href="{{ $edit }}/{{ $item->id }}"
                                class="font-medium text-warning hover:underline">Edit</a>
                            <a href="{{ $delete }}/{{ $item->id }}"
                                class="font-medium text-danger hover:underline">Hapus</a>


                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>

</div>
