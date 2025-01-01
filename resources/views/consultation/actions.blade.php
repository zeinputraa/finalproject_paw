<div class="d-flex">
    <a href="{{ route('consultation.show', ['consultation' => $consultation->id]) }}" class="btn btn-outline-dark btn-sm me-2"><i
            class="bi-person-lines-fill"></i></a>
    <a href="{{ route('consultation.edit', ['consultation' => $consultation->id]) }}" class="btn btn-outline-dark btn-sm me-2"><i
            class="bi-pencil-square"></i></a>

    <div>
        <form action="" method="POST">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-outline-dark btn-sm me-2 btn-delete">
                <i class="bi-trash"></i>
            </button>
        </form>
    </div>
</div>