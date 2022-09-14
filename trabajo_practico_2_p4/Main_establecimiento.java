package trabajo_practico_2_p4;

import java.time.LocalDateTime;

public class Main_establecimiento {

	public static void main(String[] args) {
		Usuario u1 = new Usuario("Juan", "Perez");
		Usuario u2 = new Usuario("Juan", "Peressz");
		Usuario u3 = new Usuario("Juan", "Peressz");
		
		Cancha cancha1F = new Cancha("Futbol1", 100);
		Cancha cancha2F = new Cancha("Futbol2", 100);
		Cancha cancha3P = new Cancha("Paddle1", 400);
		Cancha cancha4P = new Cancha("Paddle2", 400);
		Cancha cancha5P = new Cancha("Paddle3", 400);

		Turno turno1 = new Turno("Turno 1", u1, cancha1F, LocalDateTime.of(2022, 7, 20, 11, 00));
		Turno turno2 = new Turno("Turno 1", u1, cancha1F, LocalDateTime.of(2022, 7, 20, 11, 00));
		Turno turno3 = new Turno("Turno 2", u3, cancha1F, LocalDateTime.of(2022, 7, 20, 11, 00));
		//Turno turno2 = new Turno("Turno 2", u1, cancha2F, LocalDateTime.of(2022, 8, 15, 12, 00));
		//Turno turno3 = new Turno("Turno 3", u1, cancha3P, LocalDateTime.of(2022, 6, 30, 11, 00));
		Turno turno4 = new Turno("Turno 4", u1, cancha4P, LocalDateTime.of(2022, 8, 12, 11, 00));
		
		Establecimiento_deportivo est1 = new Establecimiento_deportivo("Establecimiento 1");
		
		est1.agregarCancha(cancha1F);
		est1.agregarCancha(cancha2F);
		est1.agregarCancha(cancha3P);
		est1.agregarCancha(cancha4P);
		est1.agregarCancha(cancha5P);
		
		System.out.println(est1.detectarConflicto(turno1));
		est1.agregarTurno(turno1);
		System.out.println( est1.cobrarTurno(turno1));
		
		System.out.println(est1.detectarConflicto(turno2));
		est1.agregarTurno(turno2);
		System.out.println( est1.cobrarTurno(turno2));
		
		System.out.println(est1.detectarConflicto(turno3));
		est1.agregarTurno(turno3);
		System.out.println( est1.cobrarTurno(turno3));
		
		System.out.println(est1.detectarConflicto(turno4));
		est1.agregarTurno(turno4);
		System.out.println( est1.cobrarTurno(turno4));
		
		System.out.println(est1.getTurnos());
		
		
		
		
		
		
		
	}

}
