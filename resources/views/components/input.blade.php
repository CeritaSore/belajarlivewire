<div>
    <div class="form-group mb-3">
        @if ($type === 'file')
            <label class="block mb-2.5 text-sm font-medium text-heading" for="file_input">{{ $name }}</label>
            <input id="file_input" type="file" accept="{{ $fileType }}" {{ $required == 'true' ? 'required' : '' }}
                class="cursor-pointer bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full shadow-xs placeholder:text-body"
                wire:model='{{ $model }}'>
        @elseif($type == 'dropdown')
            <label for="countries" class="block mb-2.5 text-sm font-medium text-heading">{{ $name }}</label>
            <select id="countries" {{ $required == true ? 'required' : '' }} wire:model='{{ $model }}'
                class="block w-full px-3 py-2.5 bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand shadow-xs placeholder:text-body">
                <option value="" default>Status</option>
                @foreach ($dropdownOptions as $item)
                    <option value="{{ $item }}">{{ $item }}</option>
                @endforeach
            </select>
        @elseif ($type === 'textarea')
            <label for="message" class="block mb-2.5 text-sm font-medium text-heading">{{ $name }}</label>
            <textarea id="message" rows="4" {{ $required === 'true' ? 'required' : '' }}
                class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full p-3.5 shadow-xs placeholder:text-body"
                placeholder="{{ $placeholder }}" wire:model='{{ $model }}'></textarea>
        @else
            <label for="first_name" class="block mb-2.5 text-sm font-medium text-heading">{{ $name }}</label>
            <input type="{{ $type == null ? 'text' : $type }}" id="first_name" wire:model='{{ $model }}'
                {{ $required == true ? 'required' : '' }}
                class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body"
                placeholder="{{ $placeholder }}" />
        @endif
    </div>
</div>
