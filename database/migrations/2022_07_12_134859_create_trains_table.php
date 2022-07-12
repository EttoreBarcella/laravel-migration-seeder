{
        Schema::create('trains', function (Blueprint $table) {
            $table->id();

            $table->string('company', 30);
            $table->string('departure_station', 50);
            $table->string('arrival_station', 50);
            $table->dateTime('departure_time', 0);
            $table->dateTime('arrival_time', 0);
            $table->date('departure_date');
            $table->date('arrival_date');
            $table->string('train_code', 5);
            $table->unsignedTinyInteger('carriages');
            $table->boolean('on_time')->default(true);
            $table->boolean('is_deleted')->default(false);
            $table->timestamps();
        });
    }