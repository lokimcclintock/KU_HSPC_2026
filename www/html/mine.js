class worker {
    constructor(gps, name, description, price) {
	this.gps = gps
	this.name = name
	this.description = description
	this.price = price
    }
}

game = class {
    constructor(gold, workers, workers_bought, gps, gpc) {
	this.gold = gold
	this.workers = workers
	this.workers_bought = workers_bought
	this.gps = gps
	this.gpc = gpc
    }
}

game.gold = 0
game.gps = 0
game.gpc = 1
game.workers_bought = []
game.workers = [new worker(1,"Middle-Aged Uncle","Slow at mining, but gets the job done.", 30), new worker(5,"Younger Cousin","Morally questionable. Fits in small spaces.", 100), new worker(30,"Miner", "Good miner.",1000), new worker(500,"Gunter","The best worker you could even think of", 10000)]

shop_el = document.getElementById("shop")
gps_el = document.getElementById("gps")
gold_el = document.getElementById("gold")

function buy_worker(worker_id) {
    if(game.gold >= game.workers[worker_id].price) {
	game.gold -= game.workers[worker_id].price
	game.workers_bought.push(worker_id)
	update_ui()
    } else {
	alert("Insufficient gold!")
    }
}

function mine() {
    game.gold += game.gpc
    game.gpc++
    update_gps()
}

function update_gps() {
    game.gps = 0
    for(x in game.workers_bought) {
	game.gps += game.workers[game.workers_bought[x]].gps
    }
}

function update_ui() {
    gps_el.innerHTML = game.gps + " gold/sec"
    gold_el.innerHTML = game.gold + " gold"
}

for(i in game.workers) {
    shop_el.innerHTML += "<button onClick=\"buy_worker(" + i + ")\" title=\"" + game.workers[i].description + " | " + game.workers[i].gps + " gold/sec\">" + game.workers[i].name + " - " + game.workers[i].price + " Gold</button><br/>"
}

gameLoop = setInterval(function () {
    update_gps()
    update_ui()

    game.gold += game.gps
}, 1000)
