<tr>
    <td style="text-align: center;">{{ $word->id }}</td>
    <td style="text-align: center;">{{ $word->word }}</td>
    <td style="text-align: center;">{{ $word->word_time }}</td>
    <td style="text-align: center;">{{ $word->word_score }}</td>
    <td style="text-align: center;">{{ $word->hardness_level }}</td>
    <td style="text-align: center;">
        @include('admin.words.operations')
    </td>
</tr>