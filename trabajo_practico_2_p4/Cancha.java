package trabajo_practico_2_p4;

public class Cancha {
	
	private String tipoCancha;
	private double precio;
	
	public Cancha(String tipoCancha, double precio) {
		this.tipoCancha = tipoCancha;
		this.precio = precio;
	}

	public String getTipoCancha() {
		return tipoCancha;
	}

	public void setTipoCancha(String tipoCancha) {
		this.tipoCancha = tipoCancha;
	}

	public double getPrecio() {
		return precio;
	}

	public void setPrecio(double precio) {
		this.precio = precio;
	}

}
