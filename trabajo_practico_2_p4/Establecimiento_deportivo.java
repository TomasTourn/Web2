package trabajo_practico_2_p4;

import java.time.LocalDate;
import java.util.ArrayList;

public class Establecimiento_deportivo {

	private String nombre;
	private ArrayList<Turno> turnos;
	private ArrayList<Cancha> canchas;
	private int descuento;
	private int minimoTurnosParaSerSocio;

	public Establecimiento_deportivo(String nombre) {
		this.nombre = nombre;
		this.turnos = new ArrayList<>();
		this.canchas = new ArrayList<>();
		this.descuento = 10;
		this.minimoTurnosParaSerSocio = 4;
	}

	public String getNombre() {
		return nombre;
	}

	public void setNombre(String nombre) {
		this.nombre = nombre;
	}
	
	public LocalDate getFechaLimite() {

		LocalDate hoy = LocalDate.now();
		LocalDate fechaLimite = LocalDate.of(hoy.getYear(), (hoy.getMonthValue() - 2),	hoy.getDayOfMonth());

		return fechaLimite;
	}

	public int getDescuento() {
		return descuento;
	}

	public void setDescuento(int descuento) {
		this.descuento = descuento;
	}
	
	public int getMinimoTurnosParaSerSocio() {
		return minimoTurnosParaSerSocio;
	}

	public void setMinimoTurnosParaSerSocio(int minimoTurnosParaSerSocio) {
		this.minimoTurnosParaSerSocio = minimoTurnosParaSerSocio;
	}

	public ArrayList<Turno> getTurnos() {
		return new ArrayList<Turno>(this.turnos);
	}

	public ArrayList<Cancha> getCanchas() {

		return new ArrayList<Cancha>(this.canchas);
	}

	public void agregarCancha(Cancha cancha) {

		if (!(this.canchas.contains(cancha))) {
			this.canchas.add(cancha);
		}
	}

	public void agregarTurno(Turno turno) {

		if (!detectarConflicto(turno)) {
			System.out.println("Se agrego");
			this.turnos.add(turno);
		}else {
			System.out.println("No se agrego");
		}
	}

	public boolean detectarConflicto(Turno turno) {

		for (Turno t : this.turnos) {
			if (t.existeConflicto(turno)) {
				return true;
			}
		}

		return false;
	}
	
	public boolean usuarioEsSocio(Usuario usuario) {
		
		int turnosSacadosDespuesFecha = 0;
		
		for(Turno t : this.turnos) {
			LocalDate fechaTurno = LocalDate.of(t.getInicioTurno().getYear(), t.getInicioTurno().getMonthValue(), t.getInicioTurno().getDayOfMonth()); 
			if(t.getUsuario().equals(usuario)&&(fechaTurno.isAfter(this.getFechaLimite()))) {
				turnosSacadosDespuesFecha++;
			}
		}
		return turnosSacadosDespuesFecha>=this.minimoTurnosParaSerSocio;
	}
	
	public double cobrarTurno(Turno turno) {

		double total = 0;

		if (this.usuarioEsSocio(turno.getUsuario())) {
			System.out.println("Precio "+turno.getPrecioTurno());
			total = (turno.getPrecioTurno()-(turno.getPrecioTurno() * this.getDescuento()) / 100);
		} else {
			total = turno.getPrecioTurno();
		}
		return total;
	}
}
