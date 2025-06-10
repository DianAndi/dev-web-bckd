
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->text('descricao');
            $table->string('categoria');
            $table->string('linha');
            $table->string('imagem_url');
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('produtos');
    }
};