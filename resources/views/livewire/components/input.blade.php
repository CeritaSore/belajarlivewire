<div>
    <div class="form-group">
        @if ($type === 'file')
            <label class="block mb-2.5 text-sm font-medium text-heading" for="file_input">Upload file</label>
            <input
                class="cursor-pointer bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full shadow-xs placeholder:text-body"
                id="file_input" type="file" accept="{{ $fileType }}">
        @else
            <label for="first_name" class="block mb-2.5 text-sm font-medium text-heading">{{ $name }}</label>
            <input type="{{ $type == null ? 'text' : $type }}" id="first_name"
                class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body"
                placeholder="{{ $placeholder }}" {{ $required == false ? '' : 'required' }} />
        @endif
    </div>
</div>
