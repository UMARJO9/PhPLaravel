@forelse($result as $u)
    <tr>
        <td class="text-center">{{ $u->id }}</td>
        <td>{{ $u->first_name }}</td>
        <td>{{ $u->last_name }}</td>
        <td>{{ $u->email }}</td>
        <td class="text-center">{{ $u->age }}</td>
        <td class="text-center">
            @if($u->is_active)
                <span class="badge badge-success px-3 py-2">Активен</span>
            @else
                <span class="badge badge-danger px-3 py-2">Не активен</span>
            @endif
        </td>
        <td class="text-muted">{{ $u->created_at->format('d.m.Y H:i') }}</td>
        <td class="text-center">
            <a href="{{ route('edit_user', $u->id) }}" class="btn btn-sm btn-outline-primary rounded-pill px-3">✏️</a>
        </td>
        <td class="text-center">
            <form action="{{ route('delete_user', $u->id) }}" method="POST" onsubmit="return confirm('Удалить пользователя {{ $u->first_name }}?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-sm btn-outline-danger rounded-pill px-3">🗑️</button>
            </form>
        </td>
    </tr>
@empty
    <tr>
        <td colspan="9" class="text-center text-muted py-4">
            <em>Пользователей не найдено</em>
        </td>
    </tr>
@endforelse
