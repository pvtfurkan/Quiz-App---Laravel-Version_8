<x-app-layout>
    <x-slot name="header"> Quiz Oluştur </x-slot>
    
     <div class="card">
         <div class="card-body">
             <form method="POST" action="{{route('quizzes.store')}}">
                 @csrf   
                 <div class="form-group">
                     <label>Quiz Başlığı</label>
                     <input type='text' name='title' class="form-control" value="{{ old('title')}}"> 
                 </div>
                 <div class="form-group">
                     <label>Quiz Açıklama</label>
                     <textarea name='description' class="form-control" rows="4">{{ old('description')}}</textarea>
                 </div>
                 <div class="form-group">
                     <label>Bitiş Tarihi</label>
                     <input type="datetime-local" name="finished_at" value="{{old('finished_at')}}" class="form_control">
                 </div> 
                 <div class="form-group">
                     <button type="submit"  class="btn btn-success btn-sm btn-block">Quiz Oluştur </button>
                 </div> 
             </form>
        </div>
     </div>

</x-app-layout>