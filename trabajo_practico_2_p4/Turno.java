package trabajo_practico_2_p4;

import java.time.LocalDateTime;

public class Turno {

	private String nombre;
	private Usuario usuario;
	private Cancha cancha;
	private LocalDateTime inicioTurno;
	private int duracionTurno;

	public Turno(String nombre, Usuario usuario, Cancha cancha, LocalDateTime inicioTurno) {
		this.nombre = nombre;
		this.usuario = usuario;
		this.cancha = cancha;
		this.inicioTurno = inicioTurno;
		this.duracionTurno = 1;
	}

	public Turno(String nombre, Usuario usuario, Cancha cancha, LocalDateTime inicioTurno, int descuento, int duracionTurno) {
		this.nombre = nombre;
		this.usuario = usuario;
		this.cancha = cancha;
		this.inicioTurno = inicioTurno;
		this.duracionTurno = duracionTurno;
	}

	public String getNombre() {
		return nombre;
	}

	public void setNombre(String nombre) {
		this.nombre = nombre;
	}

	public Usuario getUsuario() {
		return usuario;
	}

	public void setUsuario(Usuario usuario) {
		this.usuario = usuario;
	}

	public LocalDateTime getInicioTurno() {
		return inicioTurno;
	}

	public void setInicioTurno(LocalDateTime inicioTurno) {
		this.inicioTurno = inicioTurno;
	}

	public LocalDateTime getFinTurno() {
		return LocalDateTime.of(this.inicioTurno.getYear(), this.inicioTurno.getMonthValue(),
				this.inicioTurno.getDayOfMonth(), this.inicioTurno.getHour() + this.duracionTurno,
				this.inicioTurno.getMinute());
	}

	public Cancha getCancha() {
		return cancha;
	}

	public double getPrecioTurno() {
		
		return this.cancha.getPrecio();
	}

	public boolean existeConflicto(Turno turno) {

		if (this.getCancha().equals(turno.getCancha())&&(turno.getInicioTurno().isBefore(this.getFinTurno()))) {

				return true;
		}

		return false;
	}

	@Override
	public String toString() {
		return "Turno [nombre=" + nombre + "]";
	}

}
